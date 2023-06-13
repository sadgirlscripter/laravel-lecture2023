
        return $this->from('noreplay@larashop.test', 'no reply') //from, then yung text
            ->subject('order status')
            ->view('email.order_status')
            ->with([
                'order' => $this->order,
                'orderId' => $this->order->orderinfo_id,
                'orderTotal' => $total,
            ]);
    }
}