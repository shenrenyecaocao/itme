<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <base href="<?php echo base_url(); ?>" />
    <link rel="icon" href="static/index/image/itme.png">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="static/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="static/admin/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/admin/css/dashboard.css" rel="stylesheet">
    <link href="static/admin/css/signin.css" rel="stylesheet">
    <script src="static/admin/js/ie-emulation-modes-warning.js"></script>
    <style type="text/css">
        .glyphicon { margin-right:5px; }
        .btn-wrapper{
            padding: 1em 0;
        }
        .thumbnail
        {
            margin-bottom: 20px;
            padding: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .item.list-group-item
        {
            float: none;
            width: 100%;
            background-color: #fff;
            margin-bottom: 10px;
        }
        .item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
        {
            background: #428bca;
        }

        .item.list-group-item .list-group-image
        {
            margin-right: 10px;
        }
        .item.list-group-item .thumbnail
        {
            margin-bottom: 0px;
        }
        .item.list-group-item .caption
        {
            padding: 9px 9px 0px 9px;
        }
        .item.list-group-item:nth-of-type(odd)
        {
            background: #eeeeee;
        }

        .item.list-group-item:before, .item.list-group-item:after
        {
            display: table;
            content: " ";
        }

        .item.list-group-item img
        {
            float: left;
        }
        .item.list-group-item:after
        {
            clear: both;
        }
        .list-group-item-text
        {
            margin: 0 0 11px;
        }
    </style>
