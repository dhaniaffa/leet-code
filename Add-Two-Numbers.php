/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $listNode = new ListNode();
        $temp = $listNode;
        $carry = 0;

        while ($l1 !== null || $l2 !== null) {
            $a = $l1 !== null ? $l1->val : 0;

            $b = $l2 !== null ? $l2->val : 0;

            $sum = $a + $b + $carry;

            $carry = (int) ($sum / 10);

            $temp->next = new ListNode($sum % 10);

            $temp = $temp->next;

            $l1 = ($l1 !== null) ? $l1->next : null;

            $l2 = ($l2 !== null) ? $l2->next : null;
        }

        if ($carry > 0) {
            $temp->next = new ListNode($carry);
        }

        return $listNode->next;
    }
}