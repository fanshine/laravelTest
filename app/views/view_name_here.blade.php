
<form action="">
    username:<input type="text" name="username">
    password:<input type="text" name="password">
    captcha: <input type="text" name="captcha"><img src={{ 'data:image/jpeg;base64,' . $captchaImage }} />
    <input type="submit" name="submit" value="submit">
</form>