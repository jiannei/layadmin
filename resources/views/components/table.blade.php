{{--  数据表格：表头操作 --}}
@if(count($table['toolbar']))
<script type="text/html" id="{{ $table['attributes']['id'].'-toolbar' }}">
    @foreach($table['toolbar'] as $item)
    <{{$item['element']}} @foreach($item['attributes'] as $key => $val) {{ $key }}="{{ $val }}" @endforeach>
    {!! $item['content'] !!}
    </{{$item['element']}}>
    @endforeach
</script>
@endif

{{-- 数据表格  --}}
<div class="layui-card">
    <div class="layui-card-body">
        <table @foreach($table['attributes'] as $key => $val) {{ $key }}="{{ $val }}" @endforeach></table>
    </div>
</div>

{{-- 数据表格：行操作按钮 --}}
@if(count($table['column']['actions']))
<script type="text/html" id="{{ $table['attributes']['id'].'-bar' }}">
    @foreach($table['column']['actions'] as $action)
    <{{$action['element']}} @foreach($action['attributes'] as $key => $val) {{ $key }}="{{ $val }}" @endforeach>
    {!! $action['content'] !!}
    </{{$action['element']}}>
    @endforeach
</script>
@endif