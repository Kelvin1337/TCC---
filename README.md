# 🚗 Chancela Automática com Reconhecimento de Placas

## 📌 Introdução
O crescimento das demandas por **segurança e agilidade** em estacionamentos, condomínios e áreas de acesso restrito impulsiona o desenvolvimento de soluções automatizadas. Este Trabalho de Conclusão de Curso propõe a criação de um **sistema de chancela automática com reconhecimento de placas veiculares**, utilizando técnicas de **Visão Computacional** e **Internet das Coisas (IoT)**.  
O objetivo é proporcionar **eficiência operacional**, **redução de custos com mão de obra** e **melhoria na experiência do usuário**.

## 🎯 Objetivos
- Automatizar a abertura de chancelas utilizando reconhecimento óptico de caracteres (OCR).
- Integrar hardware e software para controle de acesso seguro e eficiente.
- Reduzir tempo de espera e filas.
- Aplicar tecnologias modernas de visão computacional em um contexto real.

## 🛠 Tecnologias Utilizadas
- **Linguagem**: Python  
- **Framework de Visão Computacional**: OpenCV  
- **Biblioteca de OCR**: EasyOCR / Tesseract  
- **Placa de Controle**: ESP32 Wi-Fi / Bluetooth  
- **Banco de Dados**: MySQL / SQLite  
- **Comunicação**: HTTP ou MQTT  

## 🧩 Arquitetura do Sistema
```mermaid
flowchart LR
    A[Câmera Captura Imagem] --> B[Processamento com OpenCV]
    B --> C[Extração de Texto com OCR]
    C --> D[Validação no Banco de Dados]
    D -- Autorizado --> E[ESP32 Aciona Chancela]
    D -- Não Autorizado --> F[Negar Acesso]
