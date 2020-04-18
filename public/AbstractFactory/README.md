## Abstract Factoryパターン
`互いに関連したり依存し合うオブジェクト群を、その具象クラスを明確にせずに生成するためのインターフェースを提供する。`

AbstractFactoryパターンではFactory(工場)から生成されるProduct(部品)は抽象化されており、
部品の具体的な内容や生成手順をクライアントが意識しなくて済むようになる。

### メリット
- 具体的な工場を新たに追加するのが容易。

### デメリット
- 部品を新たに追加するのは困難。

![abstract_factory](https://user-images.githubusercontent.com/20272076/79625028-ff66eb80-8160-11ea-9adc-29c90df8e3e0.png)

- AbstractFactory

自身のインスタンス(ConcreteFactory)、AbstractProductのインスタンスを作り出すためのインターフェース。
関連しあう部品群の種類に応じてConcreteFactoryを切り替える。

- AbstractProduct

AbstractFactoryによって作り出される抽象的な部品や製品のインターフェース。

- Client

AbstractFactoryとAbstractProductのインターフェースだけを使って仕事を行う。
具体的な部品や製品や工場については知らない。

- ConcreteProduct

AbstractProductの実装。

- ConcreteFactory

AbstractFactoryの実装。
