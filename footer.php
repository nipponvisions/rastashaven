<?php
/* template name: footer
*/
?>



                <div class="footer"> 
                    <div class="footer_flex_container">
                        <div class= "footer_flex">
                            <h5>Jump To: </h5>
                            <!-- Quick Links  -->
                            <?php   wp_list_pages() ; ?>
                        </div>

                        <div class ="footer_flex">
                            <!--social media -->
                            <h5>Follow Us on: </h5>
                            <ul class="social_media">
                                <li> <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/social_media/facebook_logo.png" alt="facebook_logo"> </li>
                                <li> <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/social_media/Instagram.png" alt="Instagram"> </li>
                                <li> <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/social_media/Twitter_Logo_WhiteOnBlue.png" alt="Twitter_Logo_WhiteOnBlue"></li>
                                <li> <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/social_media/yt_icon_rgb.png" alt="yt_icon_rgb"> </li>
                                <li> <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/social_media/Instagram_AppIcon_Aug2017.png" alt="Instagram_AppIcon_Aug2017"> </li>
                                <li> <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/social_media/Mail_icon.png" alt="Mail_icon"> </li>
                            </ul><!--social_media-->
                        </div><!--footer_flex -->

                        <div class="footer_flex"> 
                            <h5> Site Designed and Maintained BY: </h5>
                            <ul class="designer">        
                                <li class="copyright">- copyright: @ Newenglandaudiovisualservices <br> Octomber 2019</li>
                                <li class ="site_author">
                                    <address>
                                        Author: <a href="mailto:Newenglandaudiovisualservices@gmail.com"> Moses Mat </a>.<br>
                                        Visit us at: Newengland Audio Visual Services <br>
                                        www.newenglandaudiovisualservices.com <br> 
                                        Box 564, Disneyland <br>
                                        USA
                                    </address> 
                                </li>
                            </ul><!--designer -->                    
                        </div><!--footer_flex -->

                        <div class="footer_flex">
                            <h5> Related Documents </h5>
                            <ul class="related_documents">
                                 <li class="sites_related_docs">                        
                                    Licences, taxes, registration,debts  
                                </li> 
                            </ul> 
                        </div><!--footer_flex-->
                                
                    </div><!--footer_flex_container -->
                </div><!--footer -->  			       
            </div> <!--body_section_container -->	
        </div> <!-- main_container --> 
        <?php wp_footer(); ?>
    </body>
</html>