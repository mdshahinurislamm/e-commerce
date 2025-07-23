<div class="col-xl-3">
    <div class="panel-title">
        <h3>{!! BaseHelper::clean($config['name']) !!}</h3>
    </div>
    <div class="panel-content">
        <div>{!! do_shortcode(BaseHelper::clean($config['content'])) !!}</div>
    </div>
</div>
