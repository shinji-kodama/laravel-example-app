@props(['tweet'])
<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
        <!-- ぼやき表示用のカード 開始 -->
        <div class="card card-body shadow-2 mb-2">
            <div class="d-flex justify-content-between">
                <p>
                    <span class="font-weight-bold mr-2">{{ $tweet->user->name }}</span>
                    <span style="font-size: 0.8rem;">{{ $tweet->created_at }}</span>
                </p>
            </div>
            <p class="card-text">
                {{ $tweet->message }}
            </p>
        </div>
            <!-- ぼやき表示用カード終了 -->
</div>