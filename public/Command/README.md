## Commandパターン
要求そのものをクラスとして表し、「要求を送る」側と「要求を受け取る」側を分離することを目的としている。
異なる種類の要求に対する所理を同じAPIを持つクラスとして実装することで、
処理クラスのインスタンスを切り替えるだけで様々な要求に対する処理を実行できるようになる。
また、新しい要求に対する処理クラスを実装するだけで、既存のクラスを修正することなく対応可能になる。

![command_uml](https://user-images.githubusercontent.com/20272076/79092857-2f8f4280-7d8d-11ea-8a78-8cfdbea9aff2.png)

- Command

命令のインターフェース

- ConcreteCommand

Commandインターフェースの実装。Receiverを知っていることにより、ConcreteCommandが切り替わっても
いつでもexecuteできる。

- Receiver

Commandインターフェースが実行する対象。命令の受け手。

- Client

ConcreteCommandを静止絵師、Receiverを割り当てる。

- Invoker

Commandインターフェースを呼び出して命令の実行を開始する。
