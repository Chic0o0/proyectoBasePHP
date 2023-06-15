<div>
    <h1>Register your body aquí mismo</h1>
    <form action="registerLogic" method="post">
        <label>Email: <input type="email" name="email"  pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/></label></br>
        <label>Password: <input type="password" name="password" pattern=".{8,}"  title="Eight or more characters" required/></label></br>
        <label>Name: <input type="text" name="name" required/></label></br>
        <label>Surname: <input type="text" name="surname"/></label></br>
        <label>Age: <input type="text" name="age"/></label></br>
        <label>Phone: <input type="tel" name="phone" pattern="[0-9]{9}"/></label></br>
        <label><input type="submit" name="submit" value="Submit me!"/></label></br>
    </form>
</div>