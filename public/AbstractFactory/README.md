## Abstract Factoryパターン

- AbstractProduct

AbstractFactoryによって作り出される抽象的な部品や製品のインターフェース。

- AbstractFactory

AbstractProductのインスタンスを作り出すためのインターフェース。

- Client

AbstractFactoryとAbstractProductのインターフェースだけを使って仕事を行う。
具体的な部品や製品や工場については知らない。

- ConcreteProduct

AbstractProductの実装。

- ConcreteFactory

AbstractFactoryの実装。

### メリット
- 具体的な工場を新たに追加するのが容易。

### デメリット
- 部品を新たに追加するのは困難。