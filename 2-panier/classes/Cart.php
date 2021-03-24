<?php

class Cart
{
    private $orders;
    private $shippingFee;
    private $storage;

    public function __construct()
    {
        $this->orders = [];
        $this->shippingFee = 5;

        $this->storage = new Database();
        $this->orders = $this->storage->loadCart();

        /*
		$this->storage = new Session();

		if( !empty($this->storage->loadCart()) )
		{
			$this->orders = $this->storage->loadCart();
		}*/

    }

    public function addToCart(Product $product, int $quantity): void
    {

        // regarder si le produit a ete ajouté dans le panier
        if (isset($this->orders[$product->getName()])) {
            $order = $this->orders[$product->getName()];
            $order->addQuantity($quantity);
        } else {
            $order = new ProductOrder($product, $quantity);
            $this->orders[$product->getName()] = $order;
        }

        // [] => [ ProductOrder ]
        // [] => [ 'coca' => ProductOrder ]

        $this->storage->saveCart($this->orders);

        // var_dump($this->orders);
    }

    public function displayCart()
    {
        echo '<table>
		<tr>
			<th> Nom </th>
			<th> Prix </th>
			<th> Quantity </th>
			<th> Total </th>
		</tr>';
        foreach ($this->orders as $productOrder) {
            echo '<tr>';
            echo "<td>{$productOrder->product->getName()}</td>";
            echo "<td>{$productOrder->product->getPrice()} €</td>";
            echo "<td>{$productOrder->getQuantity()}</td>";
            echo "<td>{$productOrder->getTotal()} €</td>";
            echo '</tr>';
        }

        echo '</table>';
    }

    public function getPriceWithoutFees(): float
    {
        $total = 0;

        foreach ($this->orders as $productOrder) {
            $total += $productOrder->getTotal();
        }

        return $total;
    }

    // 20% de TVA
    public function getPriceWithTaxes(): float
    {
        return $this->getPriceWithoutFees() * 1.20;
    }

    public function getPriceWithTaxesAndShippingFees(): float
    {
        return $this->getPriceWithTaxes() + $this->shippingFee;
    }

    public function displayFees()
    {
        echo '<p>Total HT ' . $this->getPriceWithoutFees() . ' €</p>';
        echo '<p>Total TTC ' . $this->getPriceWithTaxes() . ' €</p>';
        echo '<p>Total TTC + frais de port ' . $this->getPriceWithTaxesAndShippingFees() . ' €</p>';
    }
}
