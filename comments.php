
<h3 class="com-number"> <?php comments_number( 'no comments', 'one comment', '% comments' ); ?> </h3>


<?php $args = array(
	'walker'            => null,
	'max_depth'         => '',
	'style'             => 'ul',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'reply_text'        => 'Reply',
	'page'              => '',
	'per_page'          => '',
	'avatar_size'       => 0,
	'reverse_top_level' => null,
	'reverse_children'  => '',
	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
	'short_ping'        => false,   // 
    'echo'              => true     // boolean, default is true
); ?>

<?php wp_list_comments($args, $comments); ?>

	
	<?php 
		
		$fields = array(

			'author' =>
				'<div class="col-sm-6 padl pad-zero"><label for="author">' . '</label> <span class="required"></span> <input id="author" name="author" class="form-control" style="width:100%; border: none; padding:22px;" type="text"  value="Your Name *"' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
				
			'email' =>
				'<div class="col-sm-6 padr pad-zero"><label for="email">' . '</label> <span class="required"></span><input id="email" name="email" class="form-control" style="width:100%; border: none; padding:22px;" type="text" value="Your Email *"' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" /></div>',
				
		);
		
		$args = array(
			
			'class_submit' => 'gp-btn',
            'label_submit' => __( 'Submit' ),
            'id_submit' => 'submit',
			'comment_field' =>
				'<div class="col-sm-12 padl padr"><label for="comment">' . '</label> <span class="required"></span><textarea id="comment" class="form-control" style="border: none; padding:22px;" name="comment" placeholder="Your Comment *" rows="6" required="required"></textarea></p>',
			'fields' => apply_filters( 'comment_form_default_fields', $fields )
			
		);
		
		comment_form( $args ); 
		
	?>
	






















