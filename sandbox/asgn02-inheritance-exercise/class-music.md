<!-- ```mermaid
classDiagram
class Guitar {
   +brand: string
   +price: float
   +setPrice(amount: float): void
   +getPrice(): float
}

class ElectricGuitar {
  +applyDiscount(percent: float): void
}

  ElectricGuitar --|> Guitar : extends
``` -->


<!-- ```mermaid 
classDiagram 
class Guitar { 
  +brand: string-price: float 
  +setPrice(amount: float): void 
  +getPrice(): float
   } -->

```mermaid 
classDiagram 
class Guitar { 
  +brand: string #price: float 
  +setPrice(amount: float): void 
  +getBalance(): float 
  } 
  
class ElectricGuitar { 
  +applyDiscount(percent: float): void 
} 
    
ElectricGuitar --|> Guitar : extends
