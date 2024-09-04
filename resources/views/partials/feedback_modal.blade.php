<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Обратная связь</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('feedback.send') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="feedbackName">Ваше имя</label>
                        <input type="text" class="form-control" id="feedbackName" name="name" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="feedbackEmail">Ваш Email</label>
                        <input type="email" class="form-control" id="feedbackEmail" name="email" placeholder="Введите ваш Email">
                    </div>
                    <div class="form-group">
                        <label for="feedbackMessage">Сообщение</label>
                        <textarea class="form-control" id="feedbackMessage" name="message" rows="4" placeholder="Введите ваше сообщение"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
