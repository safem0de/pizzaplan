<?php
    session_start();

    function flash($name = '', $message = '')
    {
        if(!empty($name))
        {
            if(!empty($message) && empty($_SESSION[$name]))
            {
                if(!empty($_SESSION[$name]))
                {
                    unset($_SESSION[$name]);
                }
                
                $_SESSION[$name] = $message;
            }
            elseif(empty($message) && !empty($_SESSION[$name]))
            {
                // echo "<script>alert('" . $_SESSION[$name] . "');</script>";
                echo
                "
                <script>
                Swal.fire({
                    title: 'Plan was uploaded',
                    // icon: 'success',
                    html:'" . $_SESSION[$name] . "',
                    confirmButtonText: 'OK',
                    width: 600,
                    padding: '3em',
                    color: '#716add',
                    background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                    backdrop: `
                        rgba(0,0,123,0.4)
                        url('https://sweetalert2.github.io/images/nyan-cat.gif')
                        left top
                        no-repeat
                    `
                });
                </script>
                ";

                unset($_SESSION[$name]);
            }
        }

    }