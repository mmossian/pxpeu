<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>dTransporte.com</title>
    <style type="text/css">
      h3{
        font-size: 18px;
      }
      h4{
        font-size: 16px;
      }
      h5{
        font-size: 14px;
      }
      table.tcontainer{
        font-size: 12px;
        border-radius: 5px;
        position: relative;
        background: #fff;
        width: 90%;
        margin-right: 5%;
        margin-left: 5%;
        padding: 0;
        font-family: Arial;
      }
      .header{
        height: 10px;
        padding: 2px;
        background-color: #efefef;
        color: black;
        font-size: 10px;
        text-indent: 5px
      }
      .footer{
        background-color: #efefef;
        padding: 10px;
      }
      .logo{
        padding: 5px
      }

      .body{
        color: #4a7eb0;
        padding: 10px;
        margin-top: 1px;
      }
      .btn{
        background-color: #efefef;
        color: #4a7eb0;
        padding: 10px;
        border-radius: 3px;
      }
    </style>
  </head>

  <table class="tcontainer">
    <tr>
      <td class="header">dTransporte.com</td>
    </tr>
    <tr>
      <td class="logo"><img src="<?=$this->init->baseUrl?>imgs/logo-dtr-sm.png"></td>
    </tr>
    <tr>
      <td class="body"><?=$tplContent?></td>
    </tr>

    <tr>
      <td class="footer">
        <div style="float: left; font-weight: bold">
          <?=$tplSignature?>
        </div>
      </td>
    </tr>
  </table>
</html>