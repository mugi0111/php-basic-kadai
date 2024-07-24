<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編課題16</title>
</head>
<body>
  <p>
    <?php
    class Food {
      // プロパティを定義
      private $name;
      private $price;

      // プロパティの値を出力するメソッド
      public function show_name() {
        echo $this->price . '<br>';
      }

      // コンストラクタを定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal {
      // プロパティを定義
      private $name;
      private $height;
      private $weight;

      // プロパティの値を出力するメソッド
      public function show_name() {
        echo $this->height . '<br>';
      }

      // コンストラクタを定義
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンスの各プロパティの値を出力
    print_r($food);
    echo '<br>';

    print_r($animal);
    echo '<br>';

    $food->show_name();
    $animal->show_name();

    ?>
  </p>
</body>
</html>