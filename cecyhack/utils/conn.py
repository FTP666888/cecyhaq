import aiomysql

async def get_pool():
    pool = await aiomysql.create_pool(
        host='localhost',
        port=3306,
        user='root',
        password='',
        db='cecyhaq',
        charset='utf8mb4',
    )
    return pool
