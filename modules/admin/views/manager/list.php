
<!-- main container -->
<div class="content">
    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>管理员列表</h3>
                <div class="span10 pull-right">
                    <a href="<?= \yii\helpers\Url::to(['add'])?>" class="btn-flat success pull-right">
                        <span>&#43;</span>添加新管理员</a></div>
            </div>
            <!-- Users table -->
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="span2">管理员ID</th>
                        <th class="span2">
                            <span class="line"></span>管理员账号</th>
                        <th class="span2">
                            <span class="line"></span>管理员邮箱</th>
                        <th class="span3">
                            <span class="line"></span>最后登录时间</th>
                        <th class="span3">
                            <span class="line"></span>最后登录IP</th>
                        <th class="span2">
                            <span class="line"></span>添加时间</th>
                        <th class="span2">
                            <span class="line"></span>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php foreach ($list as $manger):?>
                    <!-- row -->
                    <tr>
                        <td><?= $manger->adminid; ?></td>
                        <td><?= $manger->adminuser; ?></td>
                        <td><?= $manger->adminemail; ?></td>
                        <td><?= date('Y-m-d H:i:s',$manger->logintime); ?></td>
                        <td><?= long2ip($manger->loginip);  ?></td>
                        <td><?= date('Y-m-d H:i:s',$manger->createtime); ?></td>
                        <td class="align-right">
                            <a href="<?= \yii\helpers\Url::to(['del','adminid'=>$manger->adminid]); ?>">删除</a></td>
                    </tr>
                    <!-- row -->

                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <?php if($page){ ?>
            <div class="pagination pull-right">
                    <?=
                      \yii\widgets\LinkPager::widget(['pagination'=>$page]);
                    ?>
            </div>
            <?php } ?>
            <!-- end users table -->
        </div>
    </div>
</div>
