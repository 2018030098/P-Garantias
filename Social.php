<?php
    session_start();
    include('shared/Conexion.php');
    $Active = 1;

    $stmt = $connection -> prepare($Sel_Tickets); 
    $stmt -> execute(); 
    $stmt -> store_result(); 
    $stmt -> bind_result($id, $ttl, $dsc, $date, $status, $usr_id);
    $BodyHtml = "";
    include('shared/navbar.html'); 
?>
<html>
    <div class='container'>
        <div class='row'>
            <div class='mx-4 me-5'>
                    <?php
                        while ($stmt->fetch()) {
                            $stmtUsr = $connection -> prepare($Sel_UsrById);
                            $stmtUsr -> bind_param('i', $usr_id);  
                            $stmtUsr -> execute(); 
                            $stmtUsr -> store_result();
                            $stmtUsr -> bind_result($id1, $usr, $psw, $email, $name, $gender, $img);
                            while ($stmtUsr -> fetch()){
                                $id1 = $id1;
                                $usr = $usr;
                                $name = $name;
                                $gender = $gender;
                                $img = $img;
                            }
                            if($status === 1){
                                echo "
                                    <div class='row'>
                                        <div class='social-feed-box shadow rounded'>
                                            <div class='social-avatar'>
                                                <div class='media-body text-black row'>
                                                    <div class='col-auto'>
                                                        <a href='' class='float-left'>
                                                            <img alt='image' class='' src='assets/img/delete/a6.jpg'>
                                                        </a>
                                                    </div>
                                                    <div class='col-auto'>
                                                        <a href='#' class='row'>
                                                            $usr
                                                        </a>
                                                        <small class='text-muted row'>$date</small>
                                                    </div>
                                                    <div class='col-lg-6 h5 m-2'>
                                                        $ttl <!-- 35 letras -->
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class='social-body text-black'>
                                                <p>
                                                    $dsc
                                                </p>
                                                <img src='assets/img/delete/11.jpg' class='img-fluid'>
                                            </div>
                                ";
                    
                                $stmt_Comments = $connection -> prepare($Sel_Comments);
                                $stmt_Comments -> bind_param('i',$id);  
                                $stmt_Comments -> execute(); 
                                $stmt_Comments -> store_result();
                                $stmt_Comments -> bind_result($id_Cmt, $cmt, $dte, $tck_id, $usr2_id);

                                $num_Cmt = $stmt_Comments -> num_rows();

                                echo "
                                    <button id='btnShowComments' onclick='mostrar()' class='d-block btn btn-white'>Comentarios <span class='text-muted'> $num_Cmt </span></button>
                                    
                                    <div id='Comments' class='Comments social-footer text-black mb-2 rounded' style='background-color: hsl(0, 0%, 92%);'>
                                        
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
                                ";

                                while ($stmt_Comments -> fetch()){

                                    $stmtUsr = $connection -> prepare($Sel_UsrById);
                                    $stmtUsr -> bind_param('i', $usr2_id);  
                                    $stmtUsr -> execute(); 
                                    $stmtUsr -> store_result();
                                    $stmtUsr -> bind_result($id, $usr2, $psw, $email, $name2, $gender, $img);
                                    while ($stmtUsr -> fetch()){
                                        $id = $id;
                                        $usr2 = $usr2;
                                        $name2 = $name2;
                                        $gender = $gender;
                                        $img = $img;
                                    }

                                    echo "
                                        <div class='social-comment bg-light shadow-sm rounded row mx-1 my-3'>
                                            <div class='row p-2'>
                                                <div class='col-auto'>
                                                    <a href='' class='float-left'>
                                                        <img alt='image' src='assets/img/delete/a1.jpg'>
                                                    </a>
                                                </div>
                                                <div class='media-body col-auto'>
                                                    <a href='#' class='row'>
                                                        $usr2
                                                    </a>
                                                    <small class='text-muted row'>$dte</small>
                                                </div>
                                                <div class='mt-2'>
                                                    <p>
                                                        $cmt
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ";             
                                }
                                echo "
                                            </div>      
                                        </div>
                                    </div>
                                ";
                            }
                        }   
                    ?>
                
            </div>
        </div>
    </div>
<!--   -->
</html>
