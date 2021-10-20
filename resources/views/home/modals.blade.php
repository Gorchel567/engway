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
                            <label for="name">Ваше имя</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label for="name">Телефон</label>
                            <input type="text" name="phone" class="form-control" required="required">
                        </div>
                        <p class="text-center mg-btm-5">Или свяжитесь в любой соц. сети</p>
                        <div class="text-center">
                            <a href="https://www.instagram.com/the.eng.way/?utm_medium=site" target="_blank" class="soc">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
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

