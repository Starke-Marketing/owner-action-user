<?php 
if ( is_user_logged_in()){
	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;
	$user_data = get_user_meta($user_id);
	 
	$org = array();
	
	$completed_post_id = array();
	$business_portal = get_user_meta($user_id, 'business_portal', true);
	$com_args = array( 
	  'post_type' => 'questions', 
	  'posts_per_page' => -1,
	);
	$com_questions = new WP_Query($com_args);
	while ( $com_questions->have_posts() ) : $com_questions->the_post();
		$check_id = get_user_meta($user_id, 'completed_id_'.get_the_ID());
		if(!empty($check_id)){
			$completed_post_id[] = get_user_meta($user_id, 'completed_id_'.get_the_ID());
		}
	endwhile;
	$complete_ids = array();
	foreach($completed_post_id as $key => $ids){
		foreach($ids as $ids12){
			$complete_ids[] = $ids12;
		}
	}
	$order_meta_key = array();
	//$exclude = array();
	// start
	if($business_portal == 'start'){
		$order_meta_key[] = 'start';
		$exclude =  array( 10, 20 );
		include_once('portal/start_questions.php');
	}

	
	// buy
	if($business_portal == 'buy'){
		$order_meta_key[] = 'buy';
		include_once('portal/buy_questions.php');
	}
	
	
	// franchise
	if($business_portal == 'franchise'){
		$order_meta_key[] = 'franchise';
		include_once('portal/franchise_questions.php');
	}
	
	// manage
	if($business_portal == 'manage'){
		$order_meta_key[] = 'manage';
		include_once('portal/manage_questions.php');
	}
	
	//sell
	if($business_portal == 'sell'){
		$q_cate_check = 108; 
		$order_meta_key[] = 'sell';
		include_once('portal/sell_questions.php');
	}
	
	//close
	if($business_portal == 'close'){
		$order_meta_key[] = 'close';
		include_once('portal/close_questions.php');

	}
	$org = array_unique($org);
	/* echo '<pre>';
	print_r($org);
	echo '</pre>'; */
	$name = get_user_meta($user_id, 'your_name', true);
	if ( in_array( 'subscriber', (array) $current_user->roles ) ) { ?>
		<!--  infor-mation-sec -->
		<section class="infor-mation-sec">
		   <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="oppnity-text">
							<h1>Welcome back, <?php if(!empty($name)){echo $name;}?> <span class="logout">( <a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a> )</span></h1>
							<p><a href="<?php echo get_permalink(3393);?>">Would you like to update your Information?</a></p>
						</div>
					</div>
					<div class="col-md-8">
						<div class="top_bar_portal show_completed">
							<label for="show_completed_check__">Show Completed </label>
							<label class="switch">
							  <input type="checkbox" id="show_completed_check" name="show_completed">
							  <span class="slider round"></span>
							</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="top_bar_portal show_filter">
							<form id="search_items_form">
								<input type="text" class="" id="search_items" name="search-field" placeholder="Search All Checklist Items" value="">
								<div class="search_icon">
									<i class="fa fa-search" aria-hidden="true"></i>
									<input type="submit" class="search_submit" name="submit" value="">
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12">
								<h2 class="percentage_heading">Here’s what you’re working on:	</h2>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="progress"> 
								<?php $progress_completed = get_user_meta($user_id, 'total_progress', true); ?>
								  <span class="progress-bar progress-bar-striped bg-success" id="CheckProgress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="<?php if(!empty($progress_completed)){echo 'width : ' .$progress_completed.'px';}?>"></span>
								</div>
								<div class="progress_com"> 
									<label for="file"><span class="per_com"><?php if(!empty($progress_completed)){echo $progress_completed;}else{echo '0';}?></span>% Complete</label>
								</div>
							</div>
						</div>
						<!-- main question starting -->
						<div class="update_slide">
							<?php
							$postArray = array();
							$popupids = array();
							$questArr = array();
							if(!empty($org)):
								$query_args = array (
									'post_type' => 'questions',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy'  => 'question',
											'field'     => 'term_id',
											'terms'     => $org,
										)
									),
								);
							$questions_c = new WP_Query($query_args);	
								if($questions_c->have_posts()):
									while ( $questions_c->have_posts() ) : $questions_c->the_post();
										$pid = get_the_ID();
										$questionIDs = get_the_terms( $pid , array( 'headers') );
										if(!empty($questionIDs) && is_array($questionIDs)):
											$quesId = $questionIDs[0]->term_id;
											$postArray[$quesId][] = $pid;
											$questArr[] = $quesId;
										
										endif;
										
									endwhile;	
								endif;

							$questArr = array_unique($questArr);
							$terms_fetch = get_terms( 'headers', array(
										'hide_empty' => false,
										'include' => $questArr,
										'meta_query' => array(
											'position_clause' => array(
												 'key' => $order_meta_key,
												 'value' => 0,
												 'compare' => '>='
										),
									),
								   'orderby' => 'position_clause',
								) );
							$post_array = array();
							if(!empty($terms_fetch) && is_array($terms_fetch)){
								$numberN = 0;
								foreach($terms_fetch as $termFinal){
									$idTerm = $termFinal->term_id;
									$termsPosts = $postArray[$idTerm];
									if(!empty($termsPosts) && is_array($termsPosts)): ?>
										<div class="your-idea" id="question_<?php echo $numberN;?>">
											<h6><?php echo $termFinal->name;?>:</h6>
												<div class="open-on">
													<form>
													<span class="tax-card dash_cl">
										<?php
											$fectchC =count($termsPosts);										
											foreach($termsPosts as $tpost):
												$popupids[] = $tpost;
												$post_array[$idTerm][] = $tpost;
											if(in_array($tpost, $complete_ids)){ ?>
												<aside class="complete_ids">
													<div class="complete_ids_done">
													<input type="checkbox" class="complete_checkbox" post_id="<?php echo $tpost;?>" id="completed_task_<?php echo $tpost; ?>" name="<?php echo $termFinal->slug;?>" value="<?php echo $termFinal->name;?>">
													<label><?php echo get_the_title($tpost);?></label>
														<div class="view_details_ques">
															<a href="javascript:void(0)" class="view_details_popup" id="<?php echo $tpost; ?>">View Details</a>
														</div>
													</div>
												</aside>
												<?php
												
											}else{
												
												if($fectchC <= 1){
													echo '<aside class="full_col openaside">';
												}else{ ?>
													<aside question_id="q_id_<?php echo $tpost;?>"  class="openaside">
												<?php } ?>
												<span class="checkbox_col">
													<input type="checkbox" class="checkbox" post_id="<?php echo $tpost;?>" id="register_your_business_<?php echo $tpost;?>" name="<?php echo $termFinal->slug;?>[]" value="Register your business">
												</span>
												<span class="input_col">
													<label for="register_your_business_label_<?php echo $tpost;?>" id="<?php echo $tpost;?>" class="label_class_popup <?php echo $task_completed_line;?>"><?php echo get_the_title($tpost);?></label>
												</span>
												<div class="view_details_ques">
													<a href="javascript:void(0)" class="view_details_popup" id="<?php echo $tpost;?>">View Details</a>
												</div>
												</aside>	
												
												<?php
												
											}
									
									
									
									
									
											endforeach; 
										?>
													</span>
													</form>
											<?php if( $fectchC> 4){ ?>
													<a href="javascript:void(0)" class="viewall_question show">View all</a>
											<?php } ?>		
													
													</div></div>
										<?php 
									endif;
									
								$numberN++;	
								}
								









							}
							endif;
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							$terms = get_terms( 'headers', array(
								   'hide_empty' => false,
								   'meta_query' => array(
									  'position_clause' => array(
										 'key' => $order_meta_key,
										 'value' => 0,
										 'compare' => '>='
									  ),
								   ),
								   'orderby' => 'position_clause',
								) );
							?>
							
						</div>
<!-- main question ending -->
					</div>	
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="provider more-note">
							<h6>Your Notes</h6>
							<ul>
								<?php $notes_args = array( 
								  'post_type' => 'notes', 
								  'posts_per_page' => -1, 
								  'author' => $user_id,
								);
								$notes_questions = new WP_Query($notes_args);
								if($notes_questions->have_posts()):
									while ( $notes_questions->have_posts() ) : $notes_questions->the_post();?>
									<li><a href="#" id="<?php echo get_the_ID();?>"><?php echo get_the_title();?></a></li>
								<?php endwhile; 
								endif;?>
							</ul>
							<a href="#" class="notes_popup">Click to Add More Notes</a>
						</div>
						
						<div class="article_owner_right provider">
							<h6>From Our Blog</h6>
							<?php if(!empty($post_array) && is_array($post_array)): $i=0; ?>
							<div class="accordain_d">
								<?php foreach($post_array as $ky=>$singleArr): ?>
									<div id="show_<?php echo $ky; ?>" class="main_div <?php if($i == 0 ): echo 'downArr'; endif; ?>">
										<?php
											$questionCat = get_term_by( 'id', $ky, 'headers' ); 
											echo $questionCat->name;
										?>
									</div>
									<?php if(!empty($singleArr) && is_array($singleArr)): ?>
										<div class="show_<?php echo $ky; ?> hideDiv <?php if($i == 0 ): echo 'ActiveD'; endif; ?>">
										<ul>
											<?php $i++;
											foreach($singleArr as $sngle):
											$selected_articles = get_post_meta($sngle, 'question_articles');
											foreach($selected_articles as $id_selected){
												
												foreach($id_selected as $ids){ ?>
													<li>
														<a href="<?php echo get_the_permalink($ids);?>"><?php echo get_the_title($ids);?></a>
													</li>
												<?php 
												}
											}
											endforeach; ?>
										</ul>	
										</div>
									<?php endif; ?>
									
								<?php endforeach; ?>
							</div>
							<?php endif;?>
							
							<?php 
							/* $terms_art = get_terms( 'headers', array(
								'hide_empty' => false,
							) );
							if(!empty($terms_art)){
								foreach($terms_art as $term){
									$args = array( 
									  'post_type' => 'questions', 
									  'posts_per_page' => -1,
									  'tax_query' => array(
									  'relation' => 'AND',
										array(
											'taxonomy' => 'headers',
											'field'    => 'term_id',
											'terms'    => $term->term_id,
										),
										array(
											'taxonomy' => 'question',
											'field'    => 'term_id',
											'terms'    => $org,
										),
									   )  
									);
									$questions = new WP_Query($args);
									if($questions->have_posts()){
																
										echo '<div id="right_q_post">';
										while ( $questions->have_posts() ) : $questions->the_post();
											
											$question_selelected_id = get_post_meta(get_the_ID(), 'question_articles');
											foreach($question_selelected_id as $selelected_id){
												
												foreach($selelected_id as $ids){ ?>
													<aside class="blogBox moreBox">
														<p><a href="<?php echo get_the_permalink($ids);?>"><?php echo get_the_title($ids);?></a></p>
													</aside>
												<?php 
												}
											}
										endwhile;
										echo '</div>';
									}
								}
								echo '<a id="loadMore">View More</a>';
							} */
							?>
						</div>
						
						<div class="provider guide">
							<h6>Find a service provider who can help you with these tasks</h6>
							<?php
								 $args = array(
									'post_type' => 'task_helper',
									'post_status' => 'publish',
								);
								$my_query = null;
								$my_query = new WP_query($args);
								if($my_query->have_posts()):
									while($my_query->have_posts()) : $my_query->the_post(); ?>
										<aside> <a href="<?php echo get_the_permalink(); ?>">
											<img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid">
											<p><?php echo get_the_title();?></p></a>
										</aside>
									<?php endwhile;
									wp_reset_postdata();
								else :
								_e( 'Sorry, no posts matched your criteria.' );
								endif; ?>
						</div>
					</div>			
				</div>
			</div> 
		</section>
		
		<!-- add notes popup -->
		<div class="notes_popup_box footer_nav_popup notes_popup notes_popup_show" style="display: none;">
			<div class="nav_popup_inner">
				<span class="close"><i class="fa fa-times" aria-hidden="true"></i></span>
				<form id="notes_form">
					<div class="notes_field">
						<label><?php _e( 'Title', 'owner-action-user' ); ?></label>
						<input type="text" placeholder="Add Title" name="title">
					</div>
					<div class="notes_field">
						<label><?php _e( 'Description', 'owner-action-user' ); ?></label>
						<textarea placeholder="Brief overview of topic" name="description"></textarea>
					</div>
					<aside>
						<a href="#" class="cancel"><?php _e( 'Cancel', 'owner-action-user' ); ?></a>
						<input type="submit" value="Save">
					</aside>
					<div class="view_details_loading"> 
						<div id="overlay"><div class="cv-spinner"><span class="spinner"></span></div></div>
					</div>
				</form>
			</div>
		</div>
		
		<!-- edit notes popup -->
		<?php $notes_args = array( 
		  'post_type' => 'notes', 
		  'posts_per_page' => -1,
		);
		$notes_post = new WP_Query($notes_args);
		if($notes_post->have_posts()){
			while ( $notes_post->have_posts() ) : $notes_post->the_post();?>
			<div class="footer_nav_popup notes_popup notes_popup_show_<?php echo get_the_ID();?>" style="display: none;">
				<div class="nav_popup_inner">
					<span class="close"><i class="fa fa-times" aria-hidden="true"></i></span>
					<form id="edit_notes_form">
						<div class="notes_field">
							<label><?php _e( 'Title', 'owner-action-user' ); ?></label>
							<input type="text" placeholder="Add Title" name="title" value="<?php echo get_the_title();?>">
						</div>
						<div class="notes_field">
							<label><?php _e( 'Description', 'owner-action-user' ); ?></label>
							<textarea placeholder="Brief overview of topic" name="description"><?php echo get_the_content();?></textarea>
						</div>
						<h6><a href="#" class="remove_item"><i class="fa fa-trash" aria-hidden="true"></i> <?php _e( 'Remove Item', 'owner-action-user' ); ?></a></h6>
						<input type="hidden" name="post_id" id="post_id" value="<?php echo get_the_ID();?>">
						<aside>
							<a href="#" class="cancel"><?php _e( 'Cancel', 'owner-action-user' ); ?></a>
							<input type="submit" value="Save">
						</aside>
						<div class="view_details_loading"> 
							<div id="overlay"><div class="cv-spinner"><span class="spinner"></span></div></div>
						</div>
					</form>
				</div>
			</div>
		<?php endwhile;
		}?>
		
		<!-- view details popup -->
		<?php $com_args = array( 
		  'post_type' => 'questions', 
		  'posts_per_page' => -1,
 		  'post__in' => $popupids
		);
		$com_questions = new WP_Query($com_args);
		if( $com_questions->have_posts()){
			while ( $com_questions->have_posts() ) : $com_questions->the_post();?>
				<div class="footer_nav_popup view_details_popup_show_<?php echo get_the_ID();?>" style="display: none;">
					<div class="nav_popup_inner">
						<div class="close-btn"><span class="close"><i class="fa fa-times" aria-hidden="true"></i></span></div>
						<div class="popup_head">
							<div class="popup_head_col"><h3 class="popup_head"> <?php echo get_the_title();?></h3></div>
							
						</div>
						<form class="notes_form_popup">
							<?php $renewale_date = get_user_meta($user_id, get_the_ID().'_renewale_date');
								$pid = get_the_ID();
								if(in_array($pid, $complete_ids)){ ?>
									<div class="checkbox_pop mark_it">
										<input type="checkbox" class="complete_checkbox" post_id="<?php echo get_the_ID();?>" id="mark_it_<?php echo get_the_ID();?>" name="mark_it_done[]" value="<?php echo get_the_title();?>" checked>
										<label for="mark_it_<?php echo get_the_ID();?>">Mark It Done</label>
									</div>
									<span class="due_dte"><strong>Due Date:</strong> <?php $due_date = get_user_meta($user_id, get_the_ID().'_renewale_date'); if(!empty($due_date)){echo $due_date[0];}?></span>
								<?php }else{ ?>
									<div class="checkbox_pop un_mark_it">
										<input type="checkbox" class="mark_it_done_check" post_id="<?php echo get_the_ID();?>" id="mark_it_<?php echo get_the_ID();?>" name="mark_it_done[]" value="<?php echo get_the_title();?>">
										<label for="mark_it_<?php echo get_the_ID();?>">Mark It Done</label>
									</div>
									<?php
									if($renewale_date){ ?>
										<span class="due_dte"><strong>Due Date:</strong> <?php echo $renewale_date[0];?></span>
									<?php }?>
								<?php } ?>
							<div class="checkbox_pop due_text">
								<?php the_content();?>
							</div>
							<?php
							$button_group = get_field('button_under_description');
							if( $button_group && !empty($button_group['button_label'])): 
							?>
							<div class="view-mobtn">
								<a href="<?php echo ($button_group['button_url'] != '')?$button_group['button_url'] : '#' ;?>" class="vewm"><?php echo ($button_group['button_label'] != '')?$button_group['button_label'] : 'View More' ;?></a>
							</div>
							<?php endif; ?>

							<?php
							$resources_section = get_field('resources_section');
							if($resources_section && (!empty($resources_section['main_heading'] || $resources_section['add_new_resource']))):  
							?>
							<div class="desct-sec">
								<?php
								if(!empty($resources_section['main_heading'])){
									?>
									<h5><?php echo $resources_section['main_heading']; ?></h5>
									<?php
								}
								if($resources_section['add_new_resource']){
									foreach($resources_section['add_new_resource'] as $item){
										$link = '#';
										if(!empty($item['link'])){
											$link = $item['link'];
										}
										?>
										<p><?php echo (!empty($item['name']))? '<a href="'.$link.'">'.$item['name'].' – </a>' : ''; ?><?php echo (!empty($item['description']))? $item['description'] : ''; ?></p> 
										<?php
									}
								}
								?>
							</div> 
							<?php  endif; ?>
							<div class="drive-in">
								<?php 
								$selected_articles = get_post_meta(get_the_ID(),'question_articles',true);	
								if($selected_articles && count($selected_articles) > 0):
								?>
									<div class="left-dreve">
										<?php $articles_popup_heading = get_field('articles_popup_heading', 'option');
										if(!empty($articles_popup_heading)):?>
										<h5><?php echo $articles_popup_heading;?></h5>
										<?php endif;?>
										<?php 
										foreach($selected_articles as $article_id):	
											$featured_img_url = get_the_post_thumbnail_url($article_id,'thumbnail');
											?>
											<aside>
												<a href="<?php echo get_the_permalink($article_id); ?>">
													<?php if(!empty($featured_img_url)): ?>
													<img src="<?php echo $featured_img_url; ?>" class="img-fluid">
													<?php	
													endif; ?>
													
													<p><?php echo get_the_title($article_id); ?></p>
												</a>	
											</aside>	
											<?php
										endforeach;
										?>
									</div>			
								<?php
								endif;
								?>
								<?php $notes_args = array( 
								  'post_type' => 'notes', 
								  'posts_per_page' => -1, 
								  'author' => $user_id,
								);
								$notes_questions = new WP_Query($notes_args);
								if($notes_questions->have_posts()):
								?>
									<div class="right-dreve">
										<?php $articles_popup_right_heading = get_field('articles_popup_right_heading', 'option');
										if(!empty($articles_popup_right_heading)):?>
											<h5><?php echo $articles_popup_right_heading;?></h5>
										<?php endif;?>
										<ul>
											<?php
											while ( $notes_questions->have_posts() ) : $notes_questions->the_post();?>
											<li><a href="#" id="<?php echo get_the_ID();?>"><?php echo get_the_title();?></a></li>
											<?php 
											endwhile; 
											wp_reset_postdata();
											?>
										</ul>	
									</div>
								<?php
								endif; ?>	
							</div>	
							<div class="checkbox_pop due_date">
								<label>Due Date(optional)</label>
								<input placeholder="mm-dd-yyyy" class="datepicker" type="date" min="<?php echo date('m-d-Y');?>" name="date" autocomplete="off">
							</div>
							<aside class="view_details_submit">
								<a class="cancel" href="#">Cancel</a>
								<input type="submit" value="Save">
							</aside>
							<div class="view_details_loading">
								<div id="overlay"><div class="cv-spinner"><span class="spinner"></span></div></div>
							</div>
						</form>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata();
		}
	}
	$today_date = date('m-d-Y');
	if(!empty($completed_post_id)){
		foreach ($completed_post_id as $key => $id){
			$renewale_date = get_post_meta($id[0], 'renewale_date', true);
			if($today_date == $renewale_date){
				update_user_meta($user_id, 'completed_id_'.$id[0], ' ');
			}
		}
	}
	
}else{ ?>
	<script>
		window.location.href = '<?php echo home_url();?>/login';
	</script>
<?php } ?>