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
                <td>
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash"></i>
                </td>
            </tr>
            <tr>
                <td>Luty</td>
                <td>**********</td>
                <td>no</td>
                <td>
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash"></i>
                </td>
            </tr>
        </table>
        <div class="new-kudos">
            <p><span class="cross">+ </span>Add new kudos</p>
        </div>
    </section>
   <?php
} else {
    echo 'Welcome, visitor!';
}
?>




<?php
get_footer();
