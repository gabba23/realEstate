<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CMS admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <li><a href="../index.php">HOME SITE</a></li>
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                    
                    
                <?php
                
                    if(isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                
                
                ?>
                
                
                
            
                    
                    
                    
                    
                    
                    
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="./posts.php">View all posts</a>
                            </li>
                            <li>
                                <a href="posts.php?source=add_posts">Add posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./categories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#properties_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Properties <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="properties_dropdown" class="collapse">
                            <li>
                                <a href="./property.php">View all Properties</a>
                            </li>
                            <li>
                                <a href="property.php?source=add_properties">Add properties</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="./hero.php"><i class="fa fa-fw fa-wrench"></i> Front picture </a>
                    </li>
                   

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#about_dropdown"><i class="fa fa-fw fa-arrows-v"></i> About us <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="about_dropdown" class="collapse">
                            <li>
                                <a href="./about_us.php">View About us page</a>
                            </li>
                            <li>
                                <a href="./agents.php">View About us page agents</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./footer.php"><i class="fa fa-fw fa-wrench"></i> Footer </a>
                    </li>
                    <li>
                    
                    <li>
                        <a href="./comments.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="users.php">View all Users</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_user">Add User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="profile.php"><i class="fa fa-fw fa-file"></i>Profile</a>
                    </li>
                </ul>
            </div>