<style>


</style>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?> assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?> assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?> assets/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            
            
            <header>

            <?php echo form_open(base_url() . 'login/login'); ?>

				
            </header>
            <section>				
                <div id="container_demo" >

                
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <!-- <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on">  -->
                                <h1>Log in</h1> 
                                <p> 
                                    <!-- <label for="username" class="uname" data-icon="u" > Your email or username </label> -->
                                    <!-- <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/> -->


                                    <?php echo form_input(array('id'=>'username',
                                    'name'=>'username',
                                    'placeholder'=>'Username',
                                    'onclick'=>'if(this.value == \'yourplaceholder\') this.value = \'\'', //IE6 IE7 IE8
                                    'onblur'=>'if(this.value == \'\') this.value = \'yourplaceholder\''  //IE6 IE7 IE8
                                    )); ?>
                                </p>
                                <p> 
                                    <!-- <label for="password" class="youpasswd" data-icon="p"> Your password </label> -->
                                    <!-- <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />  -->


                                    <?php echo form_input(array('id'=>'password',
                                    'name'=>'password',
                                    'placeholder'=>'Password',
                                    'onclick'=>'if(this.value == \'yourplaceholder\') this.value = \'\'', //IE6 IE7 IE8
                                    'onblur'=>'if(this.value == \'\') this.value = \'yourplaceholder\''  //IE6 IE7 IE8
                                    )); ?>

                                </p>
                                
                                <?php echo validation_errors() ?>

                                <p class="login button"> 
                                    <!-- <input type="submit" value="Login" />  -->
                                    <?php echo form_submit(array('name'=> 'submit'),'login');  ?>
								</p>
                               
                               <?php echo form_close(); ?>
                            <!-- </form> -->
                        </div>

                        
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>