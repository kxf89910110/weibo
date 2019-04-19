<a href="#">
  <strong id="following" class="stat">
    {{ count($user->followings) }}
  </strong>
  Attention
</a>
<a href="#">
  <strong id="followers" class="stat">
    {{ count($user->followers) }}
  </strong>
  Fan
</a>
<a href="#">
  <strong id="statuses" class="stat">
    {{ $user->statuses()->count() }}
  </strong>
  Article
</a>
