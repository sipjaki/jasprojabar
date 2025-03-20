<style>

:root {
  --primary: #0676ed;
  --background: #222b45;
  --warning: #f2a600;
  --success: #12c99b;
  --error: #e41749;
  --dark: #151a30;
}

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 20px;
  background-color: var(--background);
}


.alert {
  min-height: 67px;
  width: 560px;
  max-width: 90%;
  border-radius: 12px;
  padding: 16px 22px 17px 20px;
  display: flex;
  align-items: center;
}
.alert-warning {
  background: var(--warning);
}
.alert-success {
  background: var(--success);
}
.alert-primary {
  background: var(--primary);
}
.alert-dark {
  background: var(--dark);
}
.alert-error {
  background: var(--error);
}
.alert .icon__wrapper {
  height: 34px;
  width: 34px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.253);
  display: flex;
  align-items: center;
  justify-content: center;
}
.alert .icon__wrapper span {
  font-size: 21px;
  color: #fff;
}
.alert p {
  color: #fff;
  font-family: Verdana;
  margin-left: 10px;
}
.alert p a,
.alert p a:visited,
.alert p a:active {
  color: #fff;
}
.alert .open {
  margin-left: auto;
  margin-right: 5px;
}
.alert .close, .alert .open {
  color: #fff;
  transition: transform 0.5s;
  font-size: 18px;
  cursor: pointer;
}
.alert .close:hover, .alert .open:hover {
  transform: scale(1.3);
}
</style>

<div class="container" style="margin-right:10px; margin-left:10px;">

    <div class="alert alert-primary">
        <div class="icon__wrapper">
            <span class="mdi mdi-alert-outline"></span>
        </div>
        <p>You’ve assigned Owner of <a href="#">Button Component.</a></p>
        <span class="mdi mdi-open-in-new open"></span>
        <span class="mdi mdi-close close"></span>
    </div>

    <div class="alert alert-success">
        <div class="icon__wrapper">
            <span class="mdi mdi-alert-outline"></span>
        </div>
        <p>You’ve assigned Owner of <a href="#">Button Component.</a></p>
        <span class="mdi mdi-open-in-new open"></span>
        <span class="mdi mdi-close close"></span>
    </div>

    <div class="alert alert-warning">
        <div class="icon__wrapper">
            <span class="mdi mdi-alert-outline"></span>
        </div>
        <p>You’ve assigned Owner of <a href="#">Button Component.</a></p>
        <span class="mdi mdi-open-in-new open"></span>
        <span class="mdi mdi-close close"></span>
  </div>

  <div class="alert alert-dark">
      <div class="icon__wrapper">
          <span class="mdi mdi-alert-outline"></span>
        </div>
        <p>You’ve assigned Owner of <a href="#">Button Component.</a></p>
        <span class="mdi mdi-open-in-new open"></span>
        <span class="mdi mdi-close close"></span>
    </div>

    @if (session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class="icon__wrapper">
            <!-- Ikon menggunakan Material Design Icons -->
            <span class="mdi mdi-alert-outline"></span>
        </div>
        <p>{{ session('delete') }}</p>
        <!-- Tombol untuk menutup alert -->
        <span class="mdi mdi-close close" data-bs-dismiss="alert" aria-label="Close"></span>
    </div>
@endif

</div>
