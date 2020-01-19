<div class="enroll-form" id="enroll">
    <h2>Записаться на курс!</h2>
    <form class="form" method="post" action="/enroll">
        @csrf
        <div class="form-group">
            <div class="row" >
                <div class="col-md-3">
                    <input type="phone" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш телефон">
                </div>
                <div class="col-md-3">
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Ваше имя">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Записаться!</button>
                </div>
            </div>
        </div>
    </form>
</div>