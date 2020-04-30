## Iteratorパターン
`集約オブジェクトが基にある内部表現を公開せずに、その要素に順にアクセスする方法を提供する`

![iterator](https://user-images.githubusercontent.com/20272076/80970460-29552900-8e56-11ea-953d-4f0b641fe1a1.png)

- Iterator

要素にアクセスするためのAPIを提供する

- ConcreteIterator

Iteratorの実装クラス。リストの内部構造に依存する走査処理が実装される。

- Aggregate

Iteratorオブジェクトを返すAPIを提供する。

- ConcreteAggregate

Aggregateの実装クラス。リスト固有のIteratorオブジェクトを返す。


## メリット
- リストの具体的な内部構造をクライアントから隠蔽する
リストを走査する処理は全てConcreteIteratorクラス内に閉じ込められる。
このため、クライアントはリストの内部構造を意識することなく走査することができる。

- リストに対する操作方法を複数用意できる
リストとそれを操作する役割のConcreteIteratorクラスが分かれているので、
異なる実装のConcreteIteratorクラスを用意することで走査方法を容易に変更できる。