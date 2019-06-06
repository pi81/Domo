<?php
/**
 * Template Name: Admin panel
 **/

get_header(); ?>

<?php
if ( is_user_logged_in() ) {
    ?>
    <section>
        <h1 class="h1">Welcome in admin panel</h1>
    </section>

    <section class="kudobox-table">
        <table>
            <tr>
                <th>KUDO BOX</th>
                <th>Password</th>
                <th>Open?</th>
                <th>Edit</th>
            </tr>
            <tr>
                <td>Styczeń</td>
                <td>*****</td>
                <td>yes</td>
                <td>yes</td>
            </tr>
            <tr>
                <td>Luty</td>
                <td>**********</td>
                <td>no</td>
                <td>yes</td>
            </tr>
        </table>
        <div class="new-kudos">
            Add new kudos
        </div>
    </section>
   <?php
} else {
    echo 'Welcome, visitor!';
}
?>




<?php
get_footer();
