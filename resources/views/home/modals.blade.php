<div class="modal fade eng-modal" id="lesson-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="lesson-modal-header" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lesson-modal-header">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="lesson-modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn sign-up-btn">Записаться</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade eng-modal" id="signup-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-header" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/signup" method="POST" id="signup-form">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-header">Записаться</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Ваше имя<sup>*</sup></label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон<sup>*</sup></label>
                        <input type="text" name="phone" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="social">Где удобно связаться?</label><br/>
                        <select name="social" class="select2-input form-control">
                            <option value="phone">Телефон</option>
                            <option value="telegram">Телеграм</option>
                            <option value="vk">Вконтакте</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience">Ваш опыт изучения языка</label>
                        <input type="text" name="experience" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lesson_now">Занимаетесь ли вы языком сейчас</label>
                        <input type="text" name="lesson_now" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lesson_format">Какой формат заданий/занятий вам нравится?</label>
                        <input type="text" name="lesson_format" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dont_like">Что вам не очень нравится делать?</label>
                        <input type="text" name="dont_like" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="purpose">Цель изучения языка</label><br/>
                        <select name="purpose" class="select2-input">
                            <option value="exam">Экзамены</option>
                            <option value="general">Общий английский</option>
                            <option value="esp">ESP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lesson_count">Сколько раз в неделю готовы заниматься с преподавателем и самостоятельно</label><br/>
                        <select name="lesson_count" class="select2-input">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="interesting">Ваши интересы и хобби</label>
                        <input type="text" name="interesting" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="expectations">Чего вы ожидаете от занятий?</label>
                        <input type="text" name="expectations" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lesson_time">Какое время для занятий предпочитаете?</label><br/>
                        <select name="lesson_time" class="select2-input">
                            <option value="morning">Утро</option>
                            <option value="day">День</option>
                            <option value="evening">Вечер</option>
                        </select>
                    </div>
                    <p class="text-center mg-btm-5">Или свяжитесь в любой соц. сети</p>
                    <div class="text-center">
                        <a href="https://www.instagram.com/the.eng.way/?utm_medium=site" target="_blank" class="soc">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://t.me/engway_bot" target="_blank" class="soc"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                        <a href="https://vk.com/theengway" target="_blank" class="soc"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="mailto:lizabbet@yandex.ru" target="_blank" class="soc"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn send-btn">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

