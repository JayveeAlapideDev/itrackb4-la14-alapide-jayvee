F1. This lesson gave us authentication, meaning we verified who the user is through login, logout, register, and the `auth` middleware. What is still missing for the next meeting is authorisation, meaning what a logged-in user is allowed to do, such as roles or policies.

F2. `session()->regenerate()` is called after login to create a new session ID, because otherwise an attacker could reuse an old session ID to impersonate you (session fixation).

F3. The same message is used for a wrong password and an unknown email so an attacker cannot tell whether an account is registered under a given email (user enumeration).

F4. `index` and `show` are public because they only read data, while `create`, `edit`, `update`, and `destroy` are protected by `auth` because they change data and the person doing it must be identified.

F5. Hiding buttons from guests is not enough because it is only cosmetic and a stranger can still type the URL or send a direct request, so the `auth` middleware on the server is what actually stops them.

F6. The route must be named exactly `login` because the `auth` middleware calls `route('login')` to know where to redirect guests, and if it does not exist, Laravel throws `Route [login] not defined`.
