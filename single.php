/*	
 *	Author		: Bercan Özcan
 *	Web URL		: http://www.bercanozcan.com
 *	Twitter		: http://www.twitter.com/bercanozcan
 *	GitHub		: http://www.github.com/bercanozcan
 */
 
 <?php
    wp_link_pages(
      array(
        'before' => '<p><strong>Sayfa:</strong> ',
        'after' => '</p>',
        'link_before' => '<strong>',
        'link_after' =>
        '</strong>'
      )
    );
?>
