            <!-- Portfolio Section -->
            <section class="page-section pb-0" id="portfolio">
                <div class="relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Portfolio
                    </h2>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                
                                <div class="section-text align-center mb-70 mb-xs-40">
                                    In&nbsp;auctor ex&nbsp;id&nbsp;urna faucibus porttitor. Lorem ipsum dolor sit amet, 
                                    consectetur adipiscing elit. In&nbsp;maximus ligula semper metus pellentesque mattis.  
                                    Maecenas volutpat, diam enim sagittis quam, id&nbsp;porta quam. Sed id&nbsp;dolor 
                                    consectetur fermentum nibh volutpat, accumsan purus.
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Works Filter -->                    
                    <div class="works-filter font-alt align-center">
                        <a href="#" class="filter active" data-filter="*">All works</a>
                        <a href="#branding" class="filter" data-filter=".design">Graphic design </a>
                        <a href="#design" class="filter" data-filter=".software">Custom software</a>
                        <a href="#photography" class="filter" data-filter=".consulting">IT consulting</a>
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                        <?php
                          $portfolio = [
                                              ['class' => "design", 'image'=> "images/portfolio/kloud-1.PNG", 'title'=> "KloudTransact", 'description' => "Graphic design for KloudTransact website"],
                                              ['class' => "consulting", 'image'=> "images/portfolio/cobra-1.PNG", 'title'=> "Cobra Review", 'description' => "Bug fixes and UI changes for Cobra Review website"],
                                              ['class' => "software", 'image'=> "images/portfolio/escalate-1.PNG", 'title'=> "Escalate Innovations", 'description' => "Escalate Innovations website"],
                                              ['class' => "design", 'image'=> "images/portfolio/disenado-1.PNG", 'title'=> "Disenado NG", 'description' => "Graphic design for Disenado NG"],
                                              ['class' => "software", 'image'=> "images/portfolio/disenado-2.PNG", 'title'=> "Disenado Marketplace", 'description' => "Dropshipping Supplier Marketplace for Disenado NG"],
                                              ['class' => "software", 'image'=> "images/portfolio/disenado-3.PNG", 'title'=> "Disenado Marketplace", 'description' => "Dropshipping Supplier Marketplace for Disenado NG"],
                                              ['class' => "consulting", 'image'=> "images/portfolio/barad-1.PNG", 'title'=> "Barad Innovations", 'description' => "Major front and back end improvements for Barad Innovations website"],
                                              ['class' => "consulting", 'image'=> "images/portfolio/barad-2.PNG", 'title'=> "Barad Innovations", 'description' => "Major front and back end improvements for Barad Innovations website"],
                                              ['class' => "software", 'image'=> "images/portfolio/kloud-2.PNG", 'title'=> "KloudTransact", 'description' => "KloudTransact website"],
                                           ];
                                           
                          shuffle($portfolio);
                          
                          for($i = 0; $i < 6; $i++) 
                          {
							  $p = $portfolio[$i];
                        ?>
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix <?=$p['class']?>">
                            <a href="<?=$p['image']?>" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="<?=$p['image']?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title"><?=$p['title']?></h3>
                                    <div class="work-descr">
                                        <?=$p['description']?> 
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        <?php
                          }
                        ?>	
                        
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->
            
            
            <!-- Call Action Section -->
            <section class="small-section bg-dark">
                <div class="container relative">
                    
                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Like Our Creative Works?</h3>
                        <div class="local-scroll">
                            <a href="#contact" class="btn btn-mod btn-w btn-medium btn-round">Start Project</a>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->