<?php
/*
Plugin Name: Subscriber List
Author: Rajesh Paul
Description: Easy to use and 100% FREE simple plugin made by me to see all subscriber list feature
*/
?>
<?php
$args = array(
 'role' => 'subscriber',
 'order' => 'DESC'
);
global $wpdb;
$users = get_users($args);
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  
  add_menu_page( 'Subscriber List', 'Subscriber', 'read', 'subscriber', 'see_subscriber', 'dashicons-buddicons-buddypress-logo
', 9 );
}

function see_subscriber(){
    $args = array(
 'role' => 'subscriber',
 'order' => 'DESC'
);
global $wpdb;
 $users = get_users($args);

    ?>
    <h3>Subscribers List:</h3>
    <table class="wp-list-table widefat fixed striped table-view-list pages">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Joining Date</th>
        </tr>
        </thead>
        <tbody>
            
           <?php
           foreach($users as $v){ 
           ?>
           <tr>
             <td><?php echo $v->user_login; ?></td>
             <td><?php echo $v->user_email; ?></td>
             <td><?php echo $v->user_registered; ?></td>
           </tr>
           <?php } ?>
           
        </tbody>
    </table>
    
    
    
    
    
    <?php
}
?>
