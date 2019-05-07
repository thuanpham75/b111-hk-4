<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
     <div class="type-107">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-left">
                            
                        </div>
                         <div class="title-center">
                             <h6>University Grade Theme Features</h6>
                        </div>
                         <div class="title-right">
                            
                        </div>
                       
                        <div class="university">
                            <div class="abc">
                                <h1>+</h1>
                                <a href="#">Premium Course Catalog System</a>
                            </div>
                        </div>
                        <div class="university">
                            <div class="abc">
                                <h1>+</h1>
                                <a href="#">Faculty User Roles with Course Catalog integration!</a>
                            </div>
                        </div>
                        <div class="university">
                            <div class="abc">
                                <h1>+</h1>
                                <a href="#">WooCommerce Intergrated to Easily Sell Merchandise</a>
                            </div>
                        </div>
                        <div class="university">
                            <div class="premium">
                                <h2>Event Celendar Pro Support!</h2>
                            </div>
                            <p class="content">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum necessitatibus officiis quod, eos  </p>
                        </div>
                        <div class="university">
                            <div class="abc">
                                <h1>+</h1>
                                <a href="#">Build Your Own Layouts with Visual Composer</a>
                            </div>
                        </div>


                    </div>
                    
                     <div class="col-md-6">
                        <div class="title-left-right">
                            
                        </div>
                        <div class="title-center">
                            <h6>News & Announcements</h6>
                        </div>
                        
                          <div class="title-right-right">
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <img class="vc_single_image-img" src="image/1.jpg" alt="picture">
                                                    
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">                       
                                <h4>New Science Research Facility!</h4>
                                <p class="content">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum necessitatibus officiis quod, eos </p>
                                <div class="read">
                                    <a href="#"><h5>READ MORE!</h5></a>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey  content-separator">
                            <span class="vc_sep_holder vc_sep_holder_l">
                                <span class="vc_sep_line"></span>                                    
                            </span>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <img class="vc_single_image-img" src="image/2.jpg" alt="picture">


                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">                       
                                <h4>Alumni Association Page</h4>
                                <p class="content">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum necessitatibus officiis quod, eos </p>
                                <div class="read1">
                                    <a href="#"><h5>ENROLL TODAY!</h5></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>

