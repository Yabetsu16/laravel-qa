<a title="Click to mark as favorite {{ $name }} (Click again to undo)"
class="favorite mt-2 {{ Auth::guest() ? 'off' : ($model->is_favorited ? 'favorited' : '') }}"
onclick="event.preventDefault(); document.getElementById('favorite-{{ $name }}-{{ $model->id }}').submit();">
<i class="fas fa-star fa-2x"></i>
</a>
<form id="favorite-{{ $name }}-{{ $model->id }}"
    action="/{{ $name }}/{{ $model->id }}/favorites" method="POST" style="display:none;">
    @csrf
    @if ($model->is_favorited)
    @method('DELETE')
    @endif
</form>
<span class="favorites-count">{{ $model->favorites_count }}</span>
