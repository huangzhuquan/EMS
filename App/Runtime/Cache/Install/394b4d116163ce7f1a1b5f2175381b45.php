<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EMS安装</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/Public/css/install.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="/Public/static/html5shiv.js"></script>
        <![endif]-->
        <script src="/Public/static/jquery-1.10.2.min.js"></script>
        <script src="/Public/static/bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="paper">
            <div class="paper-heading">
                <h1>
                    <span class="brand">EMS 员工管理系统</span>
                    <span class="text-muted"><?php if(($_SESSION['update']) == "1"): ?>升级<?php else: ?>安装<?php endif; ?>向导 <small class="text-info">V1.0</small></span>
                </h1>
            </div>
            <div class="paper-body">
                
    <pre class="agreement">
版权所有 (c) 2017-2018，深圳LEOS网络科技有限公司

保留所有权利。

感谢您选择 EMS 员工管理系统。希望我们的努力能为您提供一个高效快速和强大的在线财务管理解决方案。

EMS ，中文全称为 EMS 员工管理系统，以下简称 EMS。

深圳LEOS网络科技有限责任公司为 EMS 产品的开发商，依法独立拥有 EMS 产品著作权（软著登字第00001号）。深圳LEOS网络科技有限责任公司网址为<a href="http://www.leos.com">http://www.leos.com</a>。

使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用 EMS 软件。

本授权协议适用且仅适用于 EMS 版本，深圳LEOS网络科技有限公司拥有对本授权协议的最终解释权。

<strong>I 协议许可的权利</strong>

  1. 您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。
  2. 您可以在协议规定的约束和限制范围内修改 EMS 源代码(如果被提供的话)或界面风格以适应您的网站要求。
  3. 您拥有使用本软件相关文档资料的所有权，并独立承担与前述信息的相关法律义务。
  4. 获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。

<strong>Ⅱ 协议规定的约束和限制</strong>

  1. 未获商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。购买商业授权请登录http://www.leos.com 参考相关说明，也可以致电子邮件 845301110@qq.com了解详情。
  2. 不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。
  3. 无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用 EMS 的整体或任何部分，未经书面许可，网站页面页脚处的 EMS 名称的链接都必须保留（即“Powered By LEOS ©2017-2018 LEOS”字样），而不能清除或修改。
  4. 禁止在未经授权的情况下，将EMS作为其他商业产品的附属产品。
  5. 禁止在 EMS 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。
  6. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。

<strong>Ⅲ 有限担保和免责声明</strong>

  1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。
  2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。
  3. 深圳LEOS网络科技有限公司不对使用本软件构建的网站的课程或信息承担责任。
  4. 有关 EMS 最终用户授权协议、商业授权与技术服务的详细内容，均由 EMS 官方网站独家提供。深圳LEOS网络科技有限公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。

  电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 EMS，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
            </pre>

    <div class="actions">
        <a href="<?php echo U('Install/step1');?>" class="btn btn-primary">同意协议，并开始<?php if(($_SESSION['update']) == "1"): ?>升级<?php else: ?>安装<?php endif; ?>！</a>
    </div>

            </div>
        </div>

    </body>
</html>