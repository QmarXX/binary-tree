@include('parts.node', ['node' => $node])
<div class="level child-left">
    @if (!is_null($node->childLeft))
        @include('parts.level', ['node' => $node->childLeft])
    @endif
</div>
<div class="level child-right">
    @if (!is_null($node->childRight))
        @include('parts.level', ['node' => $node->childRight])
    @endif
</div>
