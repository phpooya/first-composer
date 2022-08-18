<style>
    #chat-box {
        background: #FFF;
        position: absolute;
        right: 50px;
        bottom: 0;
        width: 300px;
        height: 250px;
        border-radius: 15px 15px 0 0;
        z-index: 1;
        box-shadow: 0 0 8px -3px #505050;
        overflow: hidden;
    }

    #chat-box button {
        padding: 6px;
        background: #e2e8f0;
        margin: 8px 10px;
    }

    #chat-box .title {
        background: #e2e8f0;
        padding: 10px;
    }

    #chat-box input, #chat-box textarea {
        border: #e2e8f0 1px solid;
        padding: 9px;
        width: calc(100% - 20px);
        margin: 10px 10px 0;
    }

</style>

<div id="chat-box">
    <div class="title">Chat Box</div>
    <form method="post" action="{{ url('contact-with-us') }}">
        <input name="email" placeholder="example@gmail.com">
        <textarea name="content"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>