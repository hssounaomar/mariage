<div class="container">
    <!-- === END HEADER === -->
    <!-- === BEGIN CONTENT === -->

   <!-- <a href="<?=$_SERVER['REQUEST_URI']?>/test">omar</a> -->

   
    <div class="row margin-vert-30">
        <!-- Main Column -->
        <div class="col-md-9">
            <!-- Blog Post -->
            <?php
            foreach ($data['list'] as $voyage) {
                $list=$voyage->getImages($voyage->getId());

               echo '<div class="blog-post">
                <!-- Blog Item Header -->
                <div class="blog-item-header">
                    <!-- Date -->
                    
                    <!-- End Date -->
                    <!-- Title -->
                    <h2>
                       '.$voyage->getNom().'
                    </h2>
                    <!-- End Title -->
                  
                </div>
                <!-- End Blog Item Header -->
                <!-- Blog Item Body -->
                <div class="blog">
                    <div class="clearfix"></div>
                    <div class="blog-post-body row margin-top-15">
                        <div class="col-md-5">
                            <img class="pull-left" src="/mvc2/public/assets/img/voyages/'.$list.'" alt="thumb1">
                        </div>
                        <div class="col-md-7">
                        <span class="text-danger">    <b>  Date Depart: <span class="text-info">'.$voyage->getDateDepart().'</span>      Date Retour: <span class="text-info">'.$voyage->getDateRetour().'</span></b></span>
                            <p>'.$voyage->getDescription().'</p>
                        </div>
                    </div>
                    <div class="blog-item-footer">
                        <div class="row">
                            <div class="col-md-10">
                                <hr>
                            </div>
                            <div class="col-md-2">
                                <!-- Read More -->
                                <div class="blog-post-details-item blog-post-details-item-right pull-right">
                                    <a href="/mvc2/public/voyage/reserver/'.$voyage->getId().'" class="btn btn-primary">
                                        Réserver
                                        <i class="icon-chevron-right readmore-icon"></i>
                                    </a>
                                </div>
                                <!-- End Read More -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Item Body -->
            </div>';
            }
            ?>


            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li class="disabled">
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
            <!-- End Pagination -->
        </div>
        <!-- End Main Column -->
        <!-- Side Column -->
        <div class="col-md-3 margin-top-30">
            <!-- Blog Tags -->
            <div class="blog-tags">
                <h3>Tags</h3>
                <ul class="blog-tags">
                    <li>
                        <a href="#" class="blog-tag">HTML</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">CSS</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">JavaScript</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">jQuery</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">PHP</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">Ruby</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">CoffeeScript</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">Grunt</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">Bootstrap</a>
                    </li>
                    <li>
                        <a href="#" class="blog-tag">HTML5</a>
                    </li>
                </ul>
            </div>
            <!-- End Blog Tags -->
            <!-- Recent Posts -->
            <div class="recent-posts">
                <h3>Recent Posts</h3>
                <ul class="posts-list margin-top-10">
                    <li>
                        <div class="recent-post">
                            <a href="">
                                <img class="pull-left" src="/mvc2/public/assets/img/blog/thumbs/thumb1.jpg" alt="thumb1">
                            </a>
                            <a href="#" class="posts-list-title">Sidebar post example</a>
                            <br>
                            <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="recent-post">
                            <a href="">
                                <img class="pull-left" src="/mvc2/public/assets/img/blog/thumbs/thumb2.jpg" alt="thumb2">
                            </a>
                            <a href="#" class="posts-list-title">Sidebar post example</a>
                            <br>
                            <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="recent-post">
                            <a href="">
                                <img class="pull-left" src="/mvc2/public/assets/img/blog/thumbs/thumb3.jpg" alt="thumb3">
                            </a>
                            <a href="#" class="posts-list-title">Sidebar post example</a>
                            <br>
                            <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="recent-post">
                            <a href="">
                                <img class="pull-left" src="/mvc2/public/assets/img/blog/thumbs/thumb4.jpg" alt="thumb4">
                            </a>
                            <a href="#" class="posts-list-title">Sidebar post example</a>
                            <br>
                            <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
            <!-- End Recent Posts -->
        </div>
        <!-- End Side Column -->
    </div>
    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->
</div>