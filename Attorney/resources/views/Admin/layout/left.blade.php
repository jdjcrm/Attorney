<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree"  lay-filter="test">
            <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;">热点模块</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">热点添加</a></dd>
                    <dd><a href="javascript:;">热点列表</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">评论模块</a>
                <dl class="layui-nav-child">
                    <dd><a href="{{url('comment/index')}}">评论展示</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">用户模块</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">用户展示</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">法律模块</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">法律展示</a></dd>
                    <dd><a href="{{url('law/index')}}">添加法律常识</a></dd>

                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">律师投稿</a>
                <dl class="layui-nav-child">
                    <dd><a href="{{url('law/contribute')}}">审核投稿</a></dd>
                </dl>
            </li>
        </ul>
    </div>
</div>