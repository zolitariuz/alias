
	<div class="wrap">

		<?php screen_icon('generic'); ?>

		<h2>Mailing List</h2>

		<div id="newsletter-list">


			<?php

			$contact_msg = new WP_CustomTable();

			$contact_msg->prepare_items(); ?>

			<form id="movies-filter" method="GET">

				<input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />

				<?php $contact_msg->display() ?>

			</form>

		</div><!-- end #newsletter-content -->

	</div><!-- end .wrap -->

<?php


	if( ! class_exists('WP_List_Table')){
		require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
	}

	class WP_CustomTable extends WP_List_Table {


		function __construct()
		{
			global $status, $page;

			parent::__construct(array(
				'singular' => 'mail',  //singular name of the listed records
				'plural'   => 'mails', //plural name of the listed records
				'ajax'     => true     //does this table support ajax?
			));
		}



		function column_default($item, $column_name)
		{
			switch( $column_name ) {
				case 'newsletter_id':
				case 'email':
				case 'fecha' :
					return $item[ $column_name ];

				default:
					//Show the whole array for troubleshooting purposes
					return print_r( $item, true ) ;
			}
		}


		function column_id($item)
		{
			$actions = array(
				'edit'   => sprintf('<a href="?page=%s&action=%s&msg=%s">Edit</a>',$_REQUEST['page'],'edit',$item['newsletter_id']),
				'delete' => sprintf('<a href="?page=%s&action=%s&msg=%s">Delete</a>',$_REQUEST['page'],'delete',$item['newsletter_id']),
			);

			return sprintf('%1$s <span style="color:silver"></span>%2$s', $item['newsletter_id'], $this->row_actions($actions) );
		}



		function column_cb($item)
		{
			return sprintf(
				'<input type="checkbox" name="%1$s[]" value="%2$s" />', $this->_args['singular'], $item['newsletter_id']);
		}


		function get_columns()
		{
			$columns = array(
				'cb'    => '<input type="checkbox" />', //Render a checkbox instead of text
				'newsletter_id' => 'ID',
				'email'         => __('Email'),
				'fecha'         => __('Fecha')
			);
			return $columns;
		}



		function get_sortable_columns()
		{
			$sortable_columns = array(
				'newsletter_id' => array('newsletter_id', true),
				'email'         => array('email', true),
				'fecha'         => array('fecha', true)
			);
			return $sortable_columns;
		}



		function get_bulk_actions()
		{
			$actions = array( 'delete' => 'Delete' );
			return $actions;
		}


		function process_bulk_action()
		{
			  if( 'delete' === $this->current_action() ) {
				wp_die('Items deleted (or they would be if we had items to delete)!');
			}
		}



		function prepare_items()
		{
			global $wpdb , $_wp_column_headers;

			$per_page = 20;

			$screen   = get_current_screen();
			$columns  = $this->get_columns();
			$hidden   = array();
			$sortable = $this->get_sortable_columns();
			$this->_column_headers = array($columns, $hidden, $sortable);
			$this->process_bulk_action();

			$data = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}newsletter", ARRAY_A);

			usort($data, 'usort_reorder');

			$current_page = $this->get_pagenum();
			$total_items  = count($data);
			$data         = array_slice($data, (($current_page-1)*$per_page), $per_page);
			$this->items  = $data;


			$this->set_pagination_args(array(
				'total_items' => $total_items,                // calculate the total number of items
				'per_page'    => $per_page,                   // determine how many items to show on a page
				'total_pages' => ceil($total_items/$per_page) // calculate the total number of pages
			));
		}
	}



	function usort_reorder($first, $second){
		$orderby = ( ! empty($_REQUEST['orderby'])) ? $_REQUEST['orderby'] : 'newsletter_id';
		$order   = ( ! empty($_REQUEST['order']))   ? $_REQUEST['order']   : 'asc';
		$result  = strcmp($first[$orderby], $second[$orderby]);  // Determine sort order
		return ($order === 'asc') ? $result : -$result; // Send final sort direction to usort
	}