<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\personal\ajax.html";i:1499957508;}*/ ?>
<ul class="order-list">
    <?php foreach($payStatusList as $list): ?>
    <li class="uc-order-item">
        <!--  -->
        <div class="order-title">
            <h4>
                <?php
                    if($list['status']==0){
                        echo '待支付';
                    }else if($list['status']==1||$list['status']==2){
                        echo '待收货';
                    }else {
                        echo '已完成';
                    }
                ?>
            </h4>
            <ul class="order-attr">
                <li>
                    <?php
                        echo date('Y-m-n H:i',$list['date']);
                    ?>
                &nbsp</li>
                <li><?php echo $list['consignee']; ?>&nbsp</li>
                <li>订单号:<span><?php echo $list['sn']; ?></span></li>
                <li>&nbsp在线支付</li>
            </ul>
            <div class="summary">订单金额：<span><?php echo $list['total_price']; ?>元</span></div>
        </div>
        <div class="order-content">
            <div>
                <div class="order-content-img"><img src="__PUBLIC__static/images/headfoot/hm4a320.png"></div>
                <div class="name">
                    <p>红米Note 4X 全网通版 香槟金 32GB</p>
                    <span>999元×1</span>
                </div>
            </div>
            <div>
                <div class="order-content-img"><img src="__PUBLIC__static/images/headfoot/xm6_320.png"></div>
                <div class="name">
                    <p>红米Note 4X 全网通版 香槟金 32GB</p>
                    <span>999元×1</span>
                </div>
            </div>
            <div class="order-next">
                <button>立即支付</button>
                <button>订单支付</button>
            </div>
        </div>
    </li>
    <?php endforeach; ?>
</ul>
