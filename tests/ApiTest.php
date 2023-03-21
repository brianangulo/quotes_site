<?php declare(strict_types=1);


use App\api\Api;
use App\Quotes;
use PHPUnit\Framework\TestCase;

final class ApiTest extends TestCase
{
    /**
     * TODO: find a way to avoid runInSeparateProcess
     * @runInSeparateProcess
     */
    public function testRandomJsonQuoteReturned(): void {
        // arrange
        $quote = 'this is a quote -me';
        $quotesMock = $this->createMock(Quotes::class);
        $quotesMock->method('getRandomQuotable')->willReturn($quote);
        $expectedJsonQuote = json_encode(['quote' => $quote]);
        // act
        Api::randomJsonQuote($quotesMock);
        // assert
        $this->expectOutputString($expectedJsonQuote);
    }
}
