<?php

class AdminPage extends BasePage {
  protected function get() {
    header('location: ./views/admin_page.php');
  }

}
