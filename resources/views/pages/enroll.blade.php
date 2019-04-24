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
                    <select class="form-control" name="course">
                        <option selected>--- Выберите курс ---</option>
                        <option>Детский фитнес (дети 3-6 лет)</option>
                        <option>Детский фитнес (дети 7-10 лет)</option>
                        <option>Фитнес в перинатальном периоде</option>
                        <option>Фитнес-йога</option>
                        <option>Базовая аэробика / степ" (начальный уровень)</option>
                        <option>Силовой / функциональный тренинг</option>
                        <option>Стретчинг</option>
                        <option>Диагностика физического состояния в фитнесе</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Записаться!</button>
                </div>
            </div>
        </div>
    </form>
</div>