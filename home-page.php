<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

		<div id="hero" class="yui-gc">
			
			<div class="yui-u first">
				
			</div>
			
			<div class="yui-u">
				<div id="announcement">
					<p style="padding-bottom:0; text-align:center;"><a href="http://developdaly.com/churchroot/"><img src="http://churchroot.com/wp-content/themes/churchroot/images/churchroot.png" alt="Church WordPress Themes" title="ChurchRoot" /></a></p>
					<p style="padding-top:0;">
						Check out <a href="http://developdaly.com/churchroot/">ChurchRoot</a> -- premium WordPress themes for churches.
					</p>
				</div>
			</div>
			
		</div>

		<div id="home-main"> 

	        <div class="yui-gb">
	            <div id="home-box-web-design" class="yui-u first">
	                <div class="home-box">
	                    <a href="http://developdaly.com/services/web-design/" class="home-box-container">
	                    	<span class="icon"></span><span class="home-box-title">Web Design</span>
	                        <br/>
	                        <span class="home-box-tagline">Design almost as hot as my wife</span>
	                    </a>
	                </div>
	            </div>
	            <div id="home-box-wordpress" class="yui-u">
	                <div class="home-box">
	                    <a href="http://developdaly.com/services/wordpress/" class="home-box-container">
	                    	<span class="icon"></span><span class="home-box-title">WordPress</span>
	                        <br/>
	                        <span class="home-box-tagline">I can make it do anything but laundry</span>
	                    </a>
	                </div>
	            </div>
	            <div id="home-box-seo" class="yui-u">
	                <div class="home-box">
	                    <a href="http://developdaly.com/services/seo/" class="home-box-container">
	                    	<span class="icon"></span><span class="home-box-title">SEO</span>
	                        <br/>
	                        <span class="home-box-tagline">If you build it [right] they'll come</span>
	                    </a>
	                </div>
	            </div>
	        </div>
			
			<div id="home-level-2" class="yui-g">
				
				<div class="yui-u first">
					
					<div id="slider-container">

						<div id="slider1" class="sliderwrapper">
						
							<?php $my_query = new WP_Query('category_name=portfolio&showposts=10');
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
							
								<div class="contentdiv">
									<?php get_the_image('default_size=medium'); ?>
								</div>
								
							<?php endwhile; ?>
							
							<div id="paginate-slider1" class="pagination">
							
								<a href="#" class="prev">Previous</a><a href="#" class="next">Next</a>
							</div>
													
						</div>
						
						<script type="text/javascript">
						
						featuredcontentslider.init({
							id: "slider1",  //id of main slider DIV
							contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
							toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
							nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
							revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
							enablefade: [true, 0.2],  //[true/false, fadedegree]
							autorotate: [true, 3000],  //[true/false, pausetime]
							onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
								//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
								//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
							}
						})
						
						</script>
	
					</div>
				
				</div>

                <div id="home-services" class="yui-u">
                	<h3>Seriously Awesome Websites</h3>
                    <p>
                        A professional website consists of more than just HTML. 
                        It should be <strong>standards compliant</strong>, <strong>beautifully designed</strong>, <strong>easy to maintain</strong>, <strong>accesible by everyone</strong>
                        (no matter their browser or handicap), and it should have intense <strong>search engine optimization</strong>.
                    </p>
                    <p id="home-learn-more">&rarr; <a href="http://developdaly.com/services/">Learn more about services</a></p>
                </div>
			</div>

            <div id="testimonials" class="yui-g">
                <div class="highlight-box">
                    <div class="highlight-box-container">
 
						<div id="slider2" class="sliderwrapper2">
							
							<div class="contentdiv">
								<p class="testimonial">
									"Patrick approaches challenging projects head on with a "Win Win" attitude that personifies his personable and professional demeanor. I recommend Patrick to all of my clients for Web Design and SEO services."
								</p>
								<p class="testimonial-author">-- Edgar Rodriguez, Lead Maverick</p>

							</div>

							<div class="contentdiv">
								<p class="testimonial">
									"Great eye for current web trends and technologies. Does awesome research and exceeds expectations for each task asked of him."
								</p>
								<p class="testimonial-author">-- Chris Thompson, Lead Maverick</p>

							</div>
							
							<div id="paginate-slider2" class="pagination">
							
								<a href="<?php the_permalink(); ?>" class="prev">More</a>
								<a href="<?php the_permalink(); ?>" class="next">More</a>
								
							</div>
													
						</div>
						
						<script type="text/javascript">
						
						featuredcontentslider.init({
							id: "slider2",  //id of main slider DIV
							contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
							toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
							nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
							revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
							enablefade: [true, 0.2],  //[true/false, fadedegree]
							autorotate: [true, 8000],  //[true/false, pausetime]
							onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
								//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
								//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
							}
						})
						
						</script>
						

						
                    </div>
                </div>
            </div>
			
		</div>

	</div>

<?php get_footer(); ?>