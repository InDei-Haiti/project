<aside>
  <div class="aside-body">
    <form class="newsletter" method="POST" action="/subscribe">
      {{csrf_field()}}
      <div class="icon">
        <i class="ion-ios-email-outline"></i>
        <h1>Сонин</h1>
      </div>
      <div class="input-group">
        <input name="email" type="email" class="form-control email" placeholder="Таны мэйл">
        <div class="input-group-btn">
          <button type="submit" class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
        </div>
      </div>
      <p>Захиалснаар та хамгийн сүүлийн үеийн мэдээг байнга авах болно.</p>
    </form>
  </div>
</aside>
