<?php
    session_start();
    include('shared/Conexion.php');
    $Active = 1;

    $stmt = $connection -> prepare($Sel_Tickets); 
    // $stmt -> bind_param();  
    $stmt -> execute(); 
    $stmt -> store_result(); 
    $stmt -> bind_result($id, $ttl, $dsc, $date, $status, $usr_id);
    $BodyHtml = "
<!--   -->
    <div class='container'>
        <div class='row'>
            <div class='mx-4 me-5'>
                <div class='row'>
                    <div class='social-feed-box shadow rounded'>
                        <div class='social-avatar'>
                            <div class='media-body text-black row'>
                                <div class='col-1'>
                                    <a href='' class='float-left'>
                                        <img alt='image' class='' src='assets/img/delete/a6.jpg'>
                                    </a>
                                </div>
                                <div class='col-auto'>
                                    <a href='#' class='row'>
                                        Andrew Williams
                                    </a>
                                    <small class='text-muted row'>Today 4:21 pm - 12.06.2014</small>
                                </div>
                                <div class='col-lg-6 h5 m-2'>
                                    ################################### <!-- 35 letras -->
                                </div>
                            </div>
                        </div> 

                        <div class='social-body text-black'>
                            <p>
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                default model text.
                            </p>
                            <p>
                                Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                default model text.
                            </p>
                            <img src='assets/img/delete/11.jpg' class='img-fluid'>
                        </div>

                        <button id='btnShowComments' onclick='mostrar()' class='d-block btn btn-white'>Comentarios <span class='text-muted'>3</span></button>

                        <div id='Comments' class='Comments social-footer text-black mb-2 rounded' style='background-color: hsl(0, 0%, 92%);'>
                            <div class='social-comment bg-light shadow-sm rounded row mx-1 my-3'>
                                <div class='row p-2'>
                                    <div class='col-1'>
                                        <a href='' class='float-left'>
                                            <img alt='image' src='assets/img/delete/a1.jpg'>
                                        </a>
                                    </div>
                                    <div class='media-body col-auto'>
                                        <a href='#' class='row'>
                                            Andrew Williams
                                        </a>
                                        <small class='text-muted row'>12.06.2014</small>
                                    </div>
                                    <div class='mt-2'>
                                        <p>
                                            Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='social-comment bg-light shadow-sm rounded row mx-1 my-3'>
                                <div class='row p-2'>
                                    <div class='col-1'>
                                        <a href='' class='float-left'>
                                            <img alt='image' src='assets/img/delete/a2.jpg'>
                                        </a>
                                    </div>
                                    <div class='media-body col-auto'>
                                        <a href='#' class='row'>
                                            Andrew Williams
                                        </a>
                                        <small class='text-muted row'>12.06.2014</small>
                                    </div>
                                    <div class='mt-2'>
                                        <p>
                                            Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='social-comment bg-light shadow-sm rounded row mx-1 my-3'>
                                <div class='row p-2'>
                                    <div class='col-1'>
                                        <a href='' class='float-left'>
                                            <img alt='image' src='assets/img/delete/a8.jpg'>
                                        </a>
                                    </div>
                                    <div class='media-body col-auto'>
                                        <a href='#' class='row'>
                                            Andrew Williams
                                        </a>
                                        <small class='text-muted row'>12.06.2014</small>
                                    </div>
                                    <div class='mt-2'>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil adipisci, iste repellendus aliquam quod provident rem, quibusdam quisquam modi placeat optio assumenda cupiditate architecto blanditiis, accusantium quis inventore! Explicabo, voluptate! Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='social-comment row bg-light shadow-sm p-1 rounded'>
                                <div class='col-1'>
                                    <a href='' class='float-left'>
                                        <img alt='image' src='assets/img/delete/a3.jpg'>
                                    </a>
                                </div>
                                <div class='media-body col'>
                                    <textarea class='form-control shadow' placeholder='Write comment...'></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            }
            </div>
        </div>
    </div>
<!--   -->
    ";
    include('shared/navbar.html'); 
?>