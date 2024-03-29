# Commandパターン
# 目的
```要求そのものをクラスとして表し、「要求を送る」側と「要求を受け取る」側を分離すること。
異なる種類の要求に対する所理を同じAPIを持つクラスとして実装することで、
処理クラスのインスタンスを切り替えるだけで様々な要求に対する処理を実行できるようになる。
また、新しい要求に対する処理クラスを実装するだけで、既存のクラスを修正することなく対応可能になる。
```

処理が複雑化すると全ての処理の準備をして実行まで行うと、処理のまとまりを把握しづらくなるなど保守性が悪くなることが想定される。  
例えば、Lenet のクリーニングドメインで出庫登録を行う場合、予定と実績の差異チェック、実績と予定の登録、在庫の登録などを行う。  
今は pub/sub を使っているが、この仕組みがなくて処理時間の制限もなければ同期的に処理することをまず考えるはず。  
命令単位でクラス化して実行するためのインターフェースを合わせておけば、命令を出す側は命令を作ることに専念し、命令を処理する側は処理に専念できる。  
これが、要求を送る側と要求を受け取る側を分離するということ。

# 登場するクラス
![command_uml](https://user-images.githubusercontent.com/20272076/79092857-2f8f4280-7d8d-11ea-8a78-8cfdbea9aff2.png)

### Invoker
命令(Commandインターフェース)を受け付けて、実行を開始するクラス。  
命令の追加を受け付けて、まとめて実行したりもする。

### Command
命令を実行するためのインターフェース。  
具体的な命令（ConcreteCommand）はこのインターフェースを実装する。  
execute() を1つだけ持つことが多い。

### ConcreteCommand
Commandインターフェースの実装。Receiverを知っていることにより、ConcreteCommandが切り替わっても
いつでもexecuteできる。

### Receiver
命令をどの様に実行するかを知っている唯一のクラスで、ConcreteCommandが保持している。  
ConcreteCommand が実行メソッドを持っているが、その中で Receiver を使って命令を実行する。  
ConcreteCommand 自身は命令を知らない。

# 具体例
## artisan コマンド 
- Invoker: Illuminate\Foundation\Console\Kernel 
- Command: Illuminate\Console\Command
  - 命令クラスを定義するためのベースクラス
  - インターフェースとして実行メソッド handle() を定義していないところが厳密な Command パターンではないが使い方的には合致している
- ConcreteCommand: Illuminate\Console\Command を継承したクラス。命令毎にこのクラスを用意する。
- Receiver: ConcreteCommand 内で命令を表す

# メリット
- 既存のコードを修正することなく機能拡張できる

Commandパターンを適用すると、要求の受付と要求に対する処理を切り離して実装できるため、
新しい要求が追加された場合でも既存のクラスを修正することなく、追加された要求を処理するためのクラスを実装するだけで済む。

- クラスの再利用性を向上させる

命令そのものが独立したクラスとして実装されるので、他のアプリケーションでの再利用がしやすくなる。

- 処理のキューイング

要求と処理の実行を別のタイミングで実施することができる。

- UndoやRedoのサポート

Commandクラスに実行したコマンド結果を保持しておくことで、Undo機能やRedo機能を実現できる。
